<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

if (!function_exists('checkPermission')) {
    function checkPermission($moduleId, $action)
    {
        $user = Auth::user();
        if (!$user) return false;

        $roleId = $user->role_id;

        $perm = DB::table('admin_permissions')
            ->where('role_id', $roleId)
            ->where('module_id', $moduleId)
            ->first();

        if (!$perm) return false;

        $allowedActions = ['view', 'create', 'update', 'delete', 'other'];

        if (!in_array($action, $allowedActions)) return false;

        $permissionField = 'permission_' . $action;
        return !empty($perm->$permissionField);
    }
}