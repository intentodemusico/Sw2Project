<?php
namespace Tests;

use App\Models\Auth\Role;
use App\Models\Auth\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
/**
 * Class TestCase.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
 

}