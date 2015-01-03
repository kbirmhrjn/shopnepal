<?php

class DatabaseSeeder extends Seeder {

    protected $tables = [
            'users',
            'products',
            'categories',
            'images',
            'product_attributes'
    ];
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->trucate();
		$this->call('UsersTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('ProductsTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}

    /**
     * Trucate all the tables
     */
    public function trucate()
    {
      $this->command->info('Truncating all the tables.');
      foreach($this->tables as $table)
      {
          DB::table($table)->truncate();
      }
    }

}