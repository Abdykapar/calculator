/**
 * Created by Abdykapar on 9/14/2016.
 */

Vue.component('tasks',{
    template: '#select_template',
    props:['list'],
    created(){
        this.list = JSON.parse(this.list);
    }
});
new Vue({
    el:'body',
    data: {
        a:null,
        date:0,
        to_date:0,
        date1:0,
        date2:0,
        paragraph:"Hello my paragraph",
        selected:1,
        rate:null,
        num_GFOT:1,
        ans:null,
        result_Ans:null,
        class_array:[],
        c_rate:null,
        rate1:null,
        input_admin:null,
        input_personal:null,
        input_category:null,
        d_all_sum:null,
        d_sum:null,
        d_sum1:null,
        d_sum2:null,
        d_nsp:null,
        srok:0,
        x:''
    },
    
    computed:{
        /**
         * @return {number}
         */
        Day:function () {
           //noinspection JSUnresolvedVariable
            this.date1 = this.date.split('-');
            this.date2 = this.to_date.split('-');
            this.ans = (this.date2[0] - this.date1[0])*12 + this.date2[1] - this.date1[1]  + (this.date2[2] - this.date1[2] + 1)/100;

            if (this.ans > 12){
                this.result_Ans = "Срок превысил 1 год"
            }
            else if (this.ans <= 1){
                this.result_Ans = 0.2
            }
            else if (this.ans <= 2){
                this.result_Ans = 0.3
            }
            else if (this.ans <= 3){
                this.result_Ans = 0.4
            }
            else if (this.ans <= 4){
                this.result_Ans = 0.5
            }
            else if (this.ans <= 5){
                this.result_Ans = 0.6
            }else if (this.ans <= 6){
                this.result_Ans = 0.7
            }else if (this.ans <= 7){
                this.result_Ans = 0.75
            }
            else if (this.ans <= 8){
                this.result_Ans = 0.8
            }
            else if (this.ans <= 9){
                this.result_Ans = 0.85
            }
            else if (this.ans <= 10){
                this.result_Ans = 0.9
            }
            else if (this.ans <= 11){
                this.result_Ans = 0.95
            }
            else if (this.ans > 11){
                this.result_Ans = 1
            }
       },
        rate1: function () {
           this.c_rate = this.class_array[this.num_GFOT-1].insurance_rate;
            return this.c_rate;
        },
        sum:function () {
            this.d_sum = this.input_admin * this.class_array[14].rate * this.rate1 * this.result_Ans / 100;
            return this.d_sum;
        },
        sum1:function () {
            this.d_sum1 = this.input_category * this.rate.rate * this.rate1 * this.result_Ans / 100;
            return this.d_sum1;
        },
        sum2:function () {
            this.d_sum2 = this.input_personal * this.class_array[15].rate * this.rate1 * this.result_Ans / 100;
            return this.d_sum2;
        },
        all_sum:function () {
            this.d_all_sum = this.d_sum + this.d_sum1 + this.d_sum2;
            return this.d_all_sum;
        },
        nsp:function () {
            this.d_nsp = this.d_all_sum * 2 / 100;
            return this.d_nsp;
        },
        result:function () {
            return this.d_all_sum + this.d_nsp;
        },
        srok_data: function () {
            for (this.x = 0; this.x < this.a.length; this.a ++){
                if (this.a[this.x].size_insurance/100 == this.result_Ans){
                    this.srok = this.a[this.x];
                    break;
                }
                else this.srok = 'good job dont stop';
            }
        }
       
    },

    methods:{
        myRate: function (even) {
            this.class_array = even;
            this.rate = even[this.selected-1];
        },
        my_time: function (term) {
            this.a = term;
        }
        
    },

})
