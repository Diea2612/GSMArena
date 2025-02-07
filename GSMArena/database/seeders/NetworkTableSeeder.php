<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NetworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // DB::table('network-2G')->insert([
      //       ['GSM 850' => 'GSM 850'],
      //       ['GSM 900' => 'GSM 900'],
      //       ['GSM 1800' => 'GSM 1800'],
      //       ['GSM 1900' => 'GSM 1900'],

      //   ]);

      // DB::table('network-3G')->insert([
      //       ['HSPA 850' => 'HSPA 850'],
      //       ['HSPA 900' => 'HSPA 900'],
      //       ['HSPA 1700' => 'HSPA 1700'],
      //       ['HSPA 1900' => 'HSPA 1900'],
      //       ['HSPA 2100' => 'HSPA 2100'],


      //   ]);

      // DB::table('network-4G')->insert([
      //       ['Any 4G' => 'Any 4G'],
      //       ['LTE Band 1(2100)' => 'LTE Band 1(2100)'],
      //       ['LTE Band 2(1900)' => 'LTE Band 2(1900)'],
      //       ['LTE band 3(1800)' => 'LTE band 3(1800)'],
      //       ['LTE band 4(1700/2100)' => 'LTE band 4(1700/2100)'],
      //       ['LTE band 5(850)' => 'LTE band 5(850)'],
      //       ['LTE band 6(900)' => 'LTE band 6(900)'],
      //       ['LTE band 7(2600)' => 'LTE band 7(2600)'],
      //       ['LTE band 8(900)' => 'LTE band 8(900)'],
      //       ['LTE band 9(1800)' => 'LTE band 9(1800)'],
      //       ['LTE band 8(900)' => 'LTE band 8(900)'],
      //       ['LTE band 10(1700/2100)' => 'LTE band 10(1700/2100)'],
      //       ['LTE band 11(1500)' => 'LTE band 11(1500)'],
      //       ['LTE band 12(700)' => 'LTE band 12(700)'],
      //       ['LTE band 13(700)' => 'LTE band 13(700)'],
      //       ['LTE band 14(700)' => 'LTE band 14(700)'],
      //       ['LTE band 17(700)' => 'LTE band 17(700)'],
      //       ['LTE band 18(800)' => 'LTE band 18(800)'],
      //       ['LTE band 19(800)' => 'LTE band 19(800)'],
      //       ['LTE band 20(800)' => 'LTE band 20(800)'],
      //       ['LTE band 21(1500)' => 'LTE band 21(1500)'],
      //       ['LTE band 22(3500)' => 'LTE band 22(3500)'],
      //       ['LTE band 23(2000)' => 'LTE band 23(2000)'],
      //       ['LTE band 24(1600)' => 'LTE band 24(1600)'],
      //       ['LTE band 25(1900)' => 'LTE band 25(1900)'],
      //       ['LTE band 26(850)' => 'LTE band 26(850)'],
      //       ['LTE band 27(800)' => 'LTE band 27(800)'],
      //       ['LTE band 28(700)' => 'LTE band 28(700)'],
      //       ['LTE band 29(700)' => 'LTE band 29(700)'],
      //       ['LTE band 30(2300)' => 'LTE band 30(2300)'],
      //       ['LTE band 31(450)' => 'LTE band 31(450)'],
      //       ['LTE band 32(1500)' => 'LTE band 32(1500)'],
      //       ['LTE band 33(1900)' => 'LTE band 33(1900)'],
      //       ['LTE band 34(2000)' => 'LTE band 34(2000)'],
      //       ['LTE band 35(L gap)' => 'LTE band 35(L gap)'],
      //       ['LTE band 36(U gap)' => 'LTE band 36(U gap)'],
      //       ['LTE band 37(C gap)' => 'LTE band 37(C gap)'],
      //       ['LTE band 38(2600)' => 'LTE band 38(2600)'],
      //       ['LTE band 39(1900)' => 'LTE band 39(1900)'],
      //       ['LTE band 40(2300)' => 'LTE band 40(2300)'],
      //       ['LTE band 41(2500)' => 'LTE band 41(2500)'],
      //       ['LTE band 42(3500)' => 'LTE band 42(3500)'],
      //       ['LTE band 43(3700)' => 'LTE band 43(3700)'],
      //       ['LTE band 44(700)' => 'LTE band 44(700)'],
      //       ['LTE band 46(5200)' => 'LTE band 46(5200)'],
      //       ['LTE band 66(1700/2100)' => 'LTE band 66(1700/2100)'],
      //       ['LTE band 71(600)' => 'LTE band 71(600)'],


      //   ]);

      // DB::table('network-5G')->insert([
      //       ['Any 5G' => 'Any 5G'],
      //       ['5G band 1(2100)' => '5G band 1(2100)'],
      //       ['5G band 2(1900)' => '5G band 2(1900)'],
      //       ['5G band 3(1800)' => '5G band 3(1800)'],
      //       ['5G band 5(850)' => '5G band 5(850)'],
      //       ['5G band 7(2600)' => '5G band 7(2600)'],
      //       ['5G band 8(900)' => '5G band 8(900)'],
      //       ['5G band 12(700)' => '5G band 12(700)'],
      //       ['5G band 14(700)' => '5G band 14(700)'],
      //       ['5G band 18(850)' => '5G band 18(850)'],
      //       ['5G band 20(800)' => '5G band 20(800)'],
      //       ['5G band 25(1900)' => '5G band 25(1900)'],
      //       ['5G band 28(700)' => '5G band 28(700)'],
      //       ['5G band 29(700)' => '5G band 29(700)'],
      //       ['5G band 30(2300)' => '5G band 30(2300)'],
      //       ['5G band 34(2100)' => '5G band 34(2100)'],
      //       ['5G band 38(2600)' => '5G band 38(2600)'],
      //       ['5G band 39(1900)' => '5G band 39(1900)'],
      //       ['5G band 40(2300)' => '5G band 40(2300)'],
      //       ['5G band 41(2500)' => '5G band 41(2500)'],
      //       ['5G band 48(3500)' => '5G band 48(3500)'],
      //       ['5G band 50(1500)' => '5G band 50(1500)'],
      //       ['5G band 51(1500)' => '5G band 51(1500)'],
      //       ['5G band 65(2100)' => '5G band 65(2100)'],
      //       ['5G band 66(1700/2100)' => '5G band 66(1700/2100)'],
      //       ['5G band 70(2000)' => '5G band 70(2000)'],
      //       ['5G band 71(600)' => '5G band 71(600)'],
      //       ['5G band 74(1500)' => '5G band 74(1500)'],
      //       ['5G band 75(1500)' => '5G band 75(1500)'],
      //       ['5G band 76(1500)' => '5G band 76(1500)'],
      //       ['5G band 77(3700)' => '5G band 77(3700)'],
      //       ['5G band 78(3500)' => '5G band 78(3500)'],
      //       ['5G band 79(4700)' => '5G band 79(4700)'],
      //       ['5G band 80(1800)' => '5G band 80(1800)'],
      //       ['5G band 81(900)' => '5G band 81(900)'],
      //       ['5G band 82(800)' => '5G band 82(800)'],
      //       ['5G band 83(700)' => '5G band 83(700)'],
      //       ['5G band 84(2100)' => '5G band 84(2100)'],
      //       ['5G band 86(1700)' => '5G band 86(1700)'],
      //       ['5G band 89(850)' => '5G band 89(850)'],
      //       ['5G band 90(2500)' => '5G band 90(2500)'],
      //       ['5G band 91(800/1500)' => '5G band 91(800/1500)'],
      //       ['5G band 92(800/1500)' => '5G band 92(800/1500)'],
      //       ['5G band 93(900/1500)' => '5G band 93(900/1500)'],
      //       ['5G band 94(900/1500)' => '5G band 94(900/1500)'],
      //       ['5G band 95(2100)' => '5G band 95(2100)'],
      //       ['5G band 257(28GHz)' => '5G band 257(28GHz)'],
      //       ['5G band 258(26GHz)' => '5G band 258(26GHz)'],
      //       ['5G band 260(39GHz)' => '5G band 260(39GHz)'],
      //       ['5G band 261(28GHz)' => '5G band 261(28GHz)'],





      //   ]);

    }
}
