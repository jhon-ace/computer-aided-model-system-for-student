<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

use App\Models\Teacher;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherStoreRequest;
use App\Http\Requests\TeacherUpdateRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.teacher.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherStoreRequest $request)
    {

        $validatedData = $request->validated();

        if ($request->hasFile('teacher_photo')) {
            $fileNameWithExt = $request->file('teacher_photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('teacher_photo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('teacher_photo')->storeAs('public/teacher_photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'user.png'; 
           
        }
    
        $teacher = new Teacher();
        $teacher->name = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->password = bcrypt($request->input('password'));
        $teacher->department_id = $request->input('department_id');
        $teacher->status = $request->input('status');
        $teacher->teacher_photo = $fileNameToStore;
        $teacher->save();

       
    
        $departmentName = $teacher->department ? $teacher->department->department_name : 'Not yet assigned';
    
        return redirect()->route('admin.teacher.index')
                         ->with('success', 'Teacher - ' . $teacher->name . ' of ' . $departmentName . ' department added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
        $teacher = Teacher::findOrFail($id); // Fetch a single model instance by ID
        return view('admin.teacher.edit', compact('teacher'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherUpdateRequest $request, $id)
{
    $teacher = Teacher::findOrFail($id);

    // Check if any of the fields have been changed
    $hasChanges = false;
    if ($request->name !== $teacher->name ||
        $request->email !== $teacher->email ||
        $request->status !== $teacher->status || 
        (!empty($request->password) && !Hash::check($request->password, $teacher->password)) ||
        $request->department_id !== $teacher->department_id) 
    {
        $hasChanges = true;
    }

    // Check if a new file is uploaded and if it's different from the existing one
    if ($request->hasFile('teacher_photo')) {
        $fileNameWithExt = $request->file('teacher_photo')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('teacher_photo')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;

        if ($fileNameToStore !== $teacher->teacher_photo) {
            $hasChanges = true;
        }
    }

    if ($hasChanges) {
        try {
            $data = $request->validated();

            // Handle file upload
            if ($request->hasFile('teacher_photo')) {
                $path = $request->file('teacher_photo')->storeAs('public/teacher_photos', $fileNameToStore);
                $data['teacher_photo'] = $fileNameToStore;

                // Delete previous photo if necessary
                if ($teacher->teacher_photo && $teacher->teacher_photo !== 'user.png') {
                    Storage::delete('public/teacher_photos/' . $teacher->teacher_photo);
                }
            }

            // Handle password update
            if (!empty($request->password)) {
                $data['password'] = Hash::make($request->password);
            } else {
                // Exclude password from data to avoid hashing the existing password again
                unset($data['password']);
            }

            // Update teacher data
            $teacher->update($data);

            return redirect()->route('admin.teacher.index')
                ->with('success', 'Teacher ' . $teacher->name . ' updated successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] === 1062) { // MySQL error code for duplicate entry
                return redirect()->route('admin.teacher.index')
                    ->with('error', 'Teacher - ' . $teacher->name . ' already exists.');
            } else {
                return redirect()->route('admin.teacher.index')
                    ->with('error', 'An error occurred while updating the teacher.');
            }
        }
    } else {
        return redirect()->route('admin.teacher.index')
            ->with('info', 'No changes were made to teacher ' . $teacher->name .  '.');
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }

    public function deleteSelected(Request $request)
    {

        
        // Get the IDs of the selected courses
        $selectedTeachers = $request->input('selected');

        if ($selectedTeachers) {
            // Fetch the selected teachers
            $teachers = Teacher::whereIn('id', $selectedTeachers)->get();
    
            // Iterate over each teacher to delete their photo if necessary
            foreach ($teachers as $teacher) {
                if ($teacher->teacher_photo && $teacher->teacher_photo !== 'user.png') {
                    Storage::delete('public/teacher_photos/' . $teacher->teacher_photo);
                }
            }
    
            // Delete the selected teachers
            Teacher::whereIn('id', $selectedTeachers)->delete();
    

            // Redirect with a success message
            return redirect()->route('admin.teacher.index')->with('success', 'Selected teacher have been deleted successfully.');
        } else {
            // Redirect with an error message if no courses were selected
            return redirect()->route('admin.teacher.index')->with('error', 'No teacher selected for deletion.');
        }
    }
}