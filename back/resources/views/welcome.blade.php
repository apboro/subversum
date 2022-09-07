<?php

?>
<style>
.container {
display: flex;
flex-direction: row;
}
.container-1{
border: 2px solid lightblue;
box-sizing: border-box;
}
.container-2{
border: 2px solid lightblue;
box-sizing: border-box;
}
.container-3{
    border: 2px solid lightblue;
    box-sizing: border-box;
}
</style>

<title>Api Subversum</title>
<div class="container">
<div class="container-1">
API GET calls (add to subversum.space/api):<br>
/workers - tokenized <br>
/planets<br>
/resources<br>
/buildings<br>
/regions<br>
/continents<br>
/res_map<br>
/buildings_map<br>
/workers_map<br>
/items<br>
/drones<br>
/auctions<br>
/users/1 - получить инфу по юзеру с айди 1<br>
/regions/2 - информация с участками по региону с айди 2<br>
/plots/2 - информация по участку с айди 2<br>
</div>
<div class="container-2">
POST methods<br>
<b>/api/login</b><br>
body:<br>
    email=lgrimes@example.net<br>
    password=password<br>
<br>
<b>/api/logout</b><br>
<br>
<b>/api/register</b><br>
body:<br>
    name=name<br>
    email=lgrimes@example.net<br>
    password=password<br>
    password_confirmation=password<br><br>
<b>/api/plots/info</b><br>
POST<br>
Body<br>
long - int<br>
lat - int<br>
<b>/api/auctions/buy</b> - buy lot<br>
body:<br>
    auction_id - id of auctions lot<br>
    user_id - buyer id<br>
<br>
<b>/api/auctions/store</b> - store lot<br>
body:<br>
   user_id - id of seller<br>
   resource_id id of resource<br>
   res_quantity - quantity of resource<br>
   lot_price - price of lot<br>
<br>
<br>
<b>api/energy_to_money</b><br>
передаем user_id и energy_spent<br>
убавляет у игрока энергию на energy_spent<br>
прибавляет денег по формуле dollars_per_step * energy_spent<br><br>
<br>
    <b>/api/buy_plot</b><br>
    body:
    user_id<br>
    plot_id<br>
    вычитаем у юзера кристалы = стоимости участка<br>
    ставим участку user_id покупателя<br>
    <br>
</div>
<div class="container-3">
<a href="https://docs.google.com/document/d/1AZAn-bCe-AKj9hBlw-e1PKLLdPuje_q-9IxHhsPbi3k/edit#heading=h.9w2ke2uqclmd"><b>GAME DOCS</b></a>
<br><br>
<b>DATABASE MANAGMENT</b> - <a href="https://subversum.space/adminer">https://subversum.space/adminer </a><br>
system: PostgreSQL <br>
server: pgsql<br>
username: sail<br>
password: password<br>
database: back<br><br>
<br><br>
</div>
</div>
Database structure <br>
<img width="70%" height="90%" src="https://user-images.githubusercontent.com/30046232/187691247-124cf91f-2c57-434e-b7df-6eb5f7e0562f.png"></img>

