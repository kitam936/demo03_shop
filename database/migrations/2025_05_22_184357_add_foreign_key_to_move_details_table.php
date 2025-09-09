<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('move_details', function (Blueprint $table) {
            $table->unsignedBigInteger('move_header_id')->change(); // 型をunsignedに変更
            $table->foreign('move_header_id')->references('id')->on('move_headers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('move_details', function (Blueprint $table) {
            $table->dropForeign(['move_header_id']); // 外部キー制約を削除
            $table->BigInteger('move_header_id')->change(); // 元の型に戻す
        });
    }
};
