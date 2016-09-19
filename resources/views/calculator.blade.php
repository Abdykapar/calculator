<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
dvnkdjfk
<task list="{{ json_encode($tasks) }}">

</task>
<template id="calculator_template">
    <ul class="list-group">
        <li class="list-group-item" v-for="task in list">
            @{{ task.name }}
        </li>
    </ul>
    <p>Hi world!</p>
</template>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="/vue/main.js"></script>
</body>
</html>