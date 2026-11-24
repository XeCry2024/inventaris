<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun login sesuai modul (password otomatis di-hash bcrypt oleh model User)
        User::create(['username' => 'admin', 'password' => 'admin', 'role' => 'admin']);
        User::create(['username' => 'kasir', 'password' => 'kasir', 'role' => 'kasir']);

        Barang::create(['kode' => 'BRG001', 'nama' => 'Laptop Asus', 'stok' => '10']);
        Barang::create(['kode' => 'BRG002', 'nama' => 'Printer Epson', 'stok' => '5']);
        Barang::create(['kode' => 'BRG003', 'nama' => 'Mouse Logitech', 'stok' => '25']);
    }
}
