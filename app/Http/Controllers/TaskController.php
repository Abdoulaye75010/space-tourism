<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tasks = Task::all(); // Récupère toutes les tâches depuis SQLite
        return view('tasks.index', compact('tasks'));
        // return "Ceci est la liste des actions à faire";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request): RedirectResponse
    
    {
        $task = new Task;
        $task->title = $request->title;
        $task->detail = $request->detail;
        $task->save();
        return back()->with('message', "La tâche a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
    $task = Task::findOrFail($id); // On va chercher nous-même la tâche dans la base SQLite
    return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    { 
    $task = Task::findOrFail($id); // On va chercher nous-même la tâche dans la base SQLite
    return view('tasks.edit', compact('task'));
    }

    /**
 * Update the specified resource in storage.
 */
public function update(TaskRequest $request, string $id): RedirectResponse
{
    $task = Task::findOrFail($id); // On va chercher nous-même la tâche dans la base SQLite
    
    // Mise à jour des valeurs
    $task->title = $request->title;
    $task->detail = $request->detail;
    $task->state = $request->has('state'); // la checkbox renvoie la valeur si cochée
    $task->save();

    // Redirection avec message
    return back()->with('message', "La tâche a bien été modifiée !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
    $task = Task::findOrFail($id);
    $task->delete();

    return redirect()->route('tasks.index');
    }

    /* 
    public function destroy(Task $task): RedirectResponse
    {
    $task->delete();
    return redirect()->route('tasks.index');
    }
    */

}
