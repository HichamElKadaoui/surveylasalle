‘channels' => [
// ...

'daily' => [
'driver' => 'daily',
'path' => storage_path('logs/laravel.log'),
'level' => 'debug',
'days' => 14,
'tap' => [ App\Helpers\LogHelper::class],
],
],