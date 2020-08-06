<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use VictorYoalli\LaravelCodeGenerator\Facades\CodeGenerator;
use VictorYoalli\LaravelCodeGenerator\Facades\CodeHelper;
use VictorYoalli\LaravelCodeGenerator\Facades\ModelLoader;
use VictorYoalli\LaravelCodeGenerator\Structure\Model;

function printif($type, $filename, $msg = '✖ Not generated ')
{
    echo($filename === '' ? $msg . ' : ' . $type : "✔ {$filename}") . "\n";
}

class CodeGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'code:generator {model : Model(s) separated by commas: i.e: \'User, Post, Section\' } ' .
            '{--namespace=App : Models Namesspace} ' .
            '{--w|views : View files} ' .
            '{--c|controller : Controller} ' .
            '{--a|api : Creates API Controller} ' .
            '{--r|routes : Display Routes} ' .
            '{--l|lang : Language} ' .
            '{--f|factory : Factory} ' .
            '{--t|tests : Feacture Test} ' .
            '{--A|all : All Files}' .
            '{--F|force : Overwrite files if exists} ' .
            '{--auth : Auth (not included in all)} ' .
            '{--event= : Event (not included in all)} ' .
            '{--notification= : Notification (not included in all)} ' .
            '{--theme=basic : Theme}';

    protected $description = 'Multiple files generation';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $force = $this->option('force');

        //Options
        $controller = $this->option('controller');
        $routes = $this->option('routes');
        $views = $this->option('views');
        $api = $this->option('api');
        $lang = $this->option('lang');
        $factory = $this->option('factory');
        $tests = $this->option('tests');
        $auth = $this->option('auth');
        $event = $this->option('event');
        $notification = $this->option('notification');
        $all = $this->option('all');
        $theme = $this->option('theme');
        if ($all) {
            $lang = $factory = $controller = $routes = $views = $api = $tests = $all;
        }
        $request = ($controller || $api);

        $options = compact(['factory', 'controller', 'routes', 'views',  'api', 'tests', 'auth', 'request', 'notification', 'event', 'lang']);
        $namespace = rtrim($this->option('namespace'), '\\');
        $models = collect(explode(',', $this->argument('model')));

        $models->each(function ($model) use ($namespace, $options, $theme, $force) {
            $model = "{$namespace}\\{$model}";
            if (!$model) {
                return;
            }
            $m = ModelLoader::load($model);

            $this->generate($m, $options, $theme, $force);
        });
    }

    public function generate(Model $m, $options, $theme, $force)
    {
        $option = (object) $options;
        $folder = CodeHelper::plural(CodeHelper::snake($m->name));
        if ($option->controller) {
            printif('Web Controller', CodeGenerator::generate($m, $theme . '/Http/Controllers/ModelController', "app/Http/Controllers/{$m->name}Controller.php", $force, $options));
        }
        if ($option->api) {
            printif('API Controller', CodeGenerator::generate($m, $theme . '/Http/Controllers/API/ModelController', "app/Http/Controllers/API/{$m->name}Controller.php", $force, $options));
        }
        if ($option->request) {
            printif('Form Request', CodeGenerator::generate($m, $theme . '/Http/Requests/ModelPostRequest', "app/Http/Requests/{$m->name}PostRequest.php", $force, $options));
        }

        if ($option->views) {
            printif('Create View', CodeGenerator::generate($m, $theme . '/create', "resources/views/{$folder}/create.blade.php", $force, $options));
            printif('Edit View', CodeGenerator::generate($m, $theme . '/edit', "resources/views/{$folder}/edit.blade.php", $force, $options));
            printif('Index View', CodeGenerator::generate($m, $theme . '/index', "resources/views/{$folder}/index.blade.php", $force, $options));
            printif('Show View', CodeGenerator::generate($m, $theme . '/show', "resources/views/{$folder}/show.blade.php", $force, $options));
        }
        if ($option->lang) {
            printif('Lang', CodeGenerator::generate($m, $theme . '/lang/en/Models', "resources/lang/en/{$folder}.php", $force, $options));
        }
        if ($option->factory) {
            printif('Factory ', CodeGenerator::generate($m, $theme . '/database/factories/ModelFactory', "database/factories/{$m->name}Factory.php", $force, $options));
        }
        if ($option->tests) {
            printif('Feature Test Controller', CodeGenerator::generate($m, $theme . '/tests/Feature/Http/Controllers/ModelControllerTest', "tests/Feature/Http/Controllers/{$m->name}ControllerTest.php", $force, $options));
            printif('Feature Test API Controller', CodeGenerator::generate($m, $theme . '/tests/Feature/Http/Controllers/API/ModelControllerTest', "tests/Feature/Http/Controllers/API/{$m->name}ControllerTest.php", $force, $options));
        }
        if ($option->notification) {
            printif('Notification', CodeGenerator::generate($m, $theme . '/Notifications/ModelNotification', "app/Notifications/{$m->name}{$option->notification}.php", $force, $options));
        }
        if ($option->event) {
            printif('Event', CodeGenerator::generate($m, $theme . '/Events/ModelEvent', "app/Events/{$m->name}{$option->event}.php", $force, $options));
        }
        if ($option->routes) {
            echo CodeGenerator::generate($m, $theme . '/routes') . "\n";
        }
    }
}