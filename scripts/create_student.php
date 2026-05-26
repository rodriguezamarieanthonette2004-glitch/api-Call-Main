<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Student;

try {
    $student = Student::create([
        'name' => 'Automated Test',
        'email' => 'automated-test+' . time() . '@example.com',
        'course' => 'BSIT',
    ]);
    echo json_encode($student->toArray(), JSON_PRETTY_PRINT) . PHP_EOL;
} catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage() . PHP_EOL;
}
