<!DOCTYPE html>
<html lang="en" xmlns="http://symfony.com/schema/routing" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>

    <![endif]-->
</head>
<body>
<div class="container" id="app">
    <table class="table table-bordered">
        <tr>
            <th>Классы профессионального риска</th>
            <th>Введите ГФОТ по категориям персонала</th>
            <th>Тариф,%</th>
            <th>Коэфф. по кол-ву ГФОТ</th>
            <th>Коэфф. по сроку</th>
            <th>сумма премии</th>
        </tr>
        <tr>
            <td>"Административный
                персонал"</td>
            <td> <input type="text" class="form-control"  aria-describedby="basic-addon1" v-model="input_admin"></td>
            <td>{{ $class[14]->rate }}</td>
            <td>@{{ rate1 ? rate1:'-' }}</td>
            <td>@{{ result_Ans }}</td>
            <td>@{{ sum }}</td>
        </tr>
        <tr>
            <td>
                <select class="form-control" v-model="selected" v-on:click="myRate({{ $class }})">
                    <option selected>Выберите</option>
                    @foreach($class as $a)
                        @if ($a->id < 14)
                            <option  value={{$a->id}}>{{ $a->name }}</option>
                        @endif
                    @endforeach
                </select>
            </td>
            <td><input type="text" class="form-control"  aria-describedby="basic-addon1" v-model="input_category"></td>
            <td>@{{ rate.rate }}</td>
            <td>@{{ rate1 ? rate1:'Не введено количество ГФОТ' }}</td>
            <td>@{{ result_Ans }}</td>
            <td>@{{ sum1 }}</td>
        </tr>
        <tr>
            <td>"Вспомогательный
                персонал"</td>
            <td> <input type="text" class="form-control"  aria-describedby="basic-addon1" v-model="input_personal"></td>
            <td>{{ $class[15]->rate }}</td>
            <td>@{{ rate1 ? rate1:'-' }}</td>
            <td>@{{ result_Ans }}</td>
            <td>@{{ sum2 }}</td>
        </tr>
    </table>
    <div class="col-lg-12">
    <div class="col-lg-4">

            <div class="form-group">
                <label for="exampleInputEmail1">Введите предполагаемый срок страхования</label>
                <divclass="form-group">
                <label for="exampleInputEmail1">с</label>
                <input type="date" class="form-control" id="exampleInputEmail1" v-model="date"  >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">по</label>
                <input type="date" class="form-control" id="exampleInputPassword1" v-model="to_date" >
            </div>

            <label for="exampleInputEmail1">Введите количество Гфот для определения отв-ти перед 1м работником</label>
            <select class="form-control" id="exampleInputEmail1" v-model="num_GFOT">
                @for($i = 1; $i < 21; $i++)
                    <option value={{ $i }}>{{ $i }}</option>
                @endfor
            </select>
        <br>
            <div class="form-inline">
                <p>@{{ Day }}</p>
            </div>
    </div>
        <div class="col-lg-6" style="float: right">
            <div class="form-group form-inline">
                <label for="12" class="col-md-4">Общая сумма</label>
                <input type="email" class="form-control" id="12" v-model="d_all_sum"><p hidden>@{{ all_sum }}</p>
            </div>
            <div class="form-group form-inline">
                <label for="13" class="col-md-4">нсп</label>
                <input type="email" class="form-control" id="13" value="@{{ nsp }}"><p hidden>@{{ nsp }}</p>
            </div>
            <div class="form-group form-inline">
                <label for="14" class="col-md-4">Итого к оплате</label>
                <input type="email" class="form-control" id="14" value="@{{ result }}"><p hidden>@{{ result }}</p>
            </div>
        </div>
    </div>

</div>
    <br>
    <br>
    <br>

</div>
<!-- jQ</html>uery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="/vue/vue.js"></script>
<script src="vue/main.js"></script>
</body>
