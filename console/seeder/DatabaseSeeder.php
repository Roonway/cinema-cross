<?php


namespace console\seeder;




use console\seeder\tables\ClientSeeder;
use console\seeder\tables\DirectorSeeder;
use console\seeder\tables\EmployeeSeeder;
use console\seeder\tables\MovieSeeder;
use console\seeder\tables\PhoneClientSeeder;
use console\seeder\tables\PhoneEmployeeSeeder;
use console\seeder\tables\ProductSeeder;
use console\seeder\tables\RoomSeeder;
use console\seeder\tables\SaleSeeder;
use console\seeder\tables\SessionSeeder;
use console\seeder\tables\TicketSeeder;
use console\seeder\tables\UserSeeder;

class DatabaseSeeder extends TableSeeder
{
    const CLIENT_COUNT = 200;
    const EMPLOYEE_COUNT = 20;
    const GENRE_COUNT = 15;
    const DIRECTOR_COUNT = 15;
    const MOVIE_COUNT = 20;
    const PRODUCT_COUNT = 20;
    const ROOM_COUNT = 4;
    const SALE_COUNT = 20;
    const TICKET_COUNT = 20;
    const PHONE_COUNT = 3;

    function run(){
        (new RoomSeeder())->run();
        (new EmployeeSeeder())->run();
        (new UserSeeder())->run();
        (new PhoneEmployeeSeeder())->run();
        (new ClientSeeder())->run();
        (new PhoneClientSeeder())->run();
        (new DirectorSeeder())->run();
        (new MovieSeeder())->run();
        (new RoomSeeder())->run();
        (new SessionSeeder())->run();
        (new TicketSeeder())->run();
        (new ProductSeeder())->run();
        (new SaleSeeder())->run();

    }
}

