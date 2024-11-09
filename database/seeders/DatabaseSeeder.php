<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(UsersTableSeeder::class);
        $this->call(KategorisTableSeeder::class);
        $this->call(MenuLinksTableSeeder::class);
        $this->call(SdasTableSeeder::class);
        $this->call(HalamenTableSeeder::class);
        $this->call(KontaksTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);

        $this->call(PostsTableSeeder::class);
        $this->call(FotosTableSeeder::class);
        $this->call(TugasTableSeeder::class);
        $this->call(BanjirsTableSeeder::class);
        $this->call(BukuDataTableSeeder::class);
        $this->call(HeadersTableSeeder::class);
        $this->call(InfografisTableSeeder::class);
        $this->call(KekeringansTableSeeder::class);
        $this->call(KinerjaBalaisTableSeeder::class);
        $this->call(MajalahPesutsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PelayananBencanasTableSeeder::class);
        $this->call(PelayananDataTableSeeder::class);
        $this->call(PelayananPegadaansTableSeeder::class);
        $this->call(PelayananPerijinansTableSeeder::class);
        $this->call(PelayananSdasTableSeeder::class);
        $this->call(PublikasiHidrologisTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
