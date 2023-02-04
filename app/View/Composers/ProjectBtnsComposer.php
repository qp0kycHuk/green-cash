<?php
 
namespace App\View\Composers;

use App\Models\Project;
use Illuminate\View\View;
 
class ProjectBtnsComposer
{
    /**
     * The projects implementation.
     *
     * @var \App\Models\Project
     */
    protected $projects;
 
    /**
     * Create a new sidebar composer.
     *
     * @param  \App\Models\Project  $projects
     * @return void
     */
    public function __construct(Project $projects)
    {
        $this->projects = $projects;
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $projectsArray = $this->projects->select('id', 'name', 'slug')->get()->toArray();

        $projects = array_filter($projectsArray, function ($item) {
            return $item['slug'] !== request()->segment(3);
        });

        $project = array_filter($projectsArray, function ($item) {
            return $item['slug'] === request()->segment(3);
        });

        $view->with('projects', $projects);
        $view->with('project', ...$project);
    }
}
