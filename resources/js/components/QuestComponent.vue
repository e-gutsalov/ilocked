<template>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Выберите дату и время игры</div>
                <div class="card-body">
                    <div class="row" v-for="date in mass">
                        <div class="timetable__day-inner">
                            <span class="timetable__date">{{ date[0] }}</span>
                            <span class="timetable__weekday">Пн</span>
                        </div>
                        <div class="col" v-for="time in date[1]">
                            <a title="Свободно" class="btn btn-outline-info">
                                <span class="timetable__time">{{ time }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        data: function () {
            return {
                mass: [
                    ['20 октября', ['10:15', '11:45', '13:45', '15:45', '17:45', '19:45', '21:45', '23:45']],
                    ['21 октября', ['10:15', '11:45', '13:45', '15:45', '17:45', '19:45', '21:45', '23:45']],
                    ['22 октября', ['10:15', '11:45', '13:45', '15:45', '17:45', '19:45', '21:45', '23:45']],
                    ['23 октября', ['10:15', '11:45', '13:45', '15:45', '17:45', '19:45', '21:45', '23:45']],
                    ['24 октября', ['10:15', '11:45', '13:45', '15:45', '17:45', '19:45', '21:45', '23:45']],
                    ['25 октября', ['10:15', '11:45', '13:45', '15:45', '17:45', '19:45', '21:45', '23:45']],
                    ['26 октября', ['10:15', '11:45', '13:45', '15:45', '17:45', '19:45', '21:45', '23:45']],
                ]
            }
        },
        filters: {
            formatDate: d => d.toLocaleString('ru-RU').replace(',', '').slice(0, -6),
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
