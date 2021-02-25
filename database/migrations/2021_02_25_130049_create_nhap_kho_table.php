<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhapKhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhap_kho', function(Blueprint $table)
		{
			$table->boolean('nhap_kho_id')->primary();
			$table->boolean('nhan_vien_id')->index('nhap_kho_nhan_vien_id_foreign');
			$table->boolean('ly_do_id')->index('nhap_kho_ly_do_id_foreign');
			$table->string('nhap_kho_ma');
			$table->boolean('ncc_id')->index('nhap_kho_ncc_id_foreign');
			$table->decimal('nhap_kho_tong_so_tien')->unsigned();
			$table->string('nhap_kho_ghi_chu');
			$table->timestamp('nhap_kho_ngay_nhap')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nhap_kho');
	}

}
