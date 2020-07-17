<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="w-100 mt-5">
                <div class="form-group">
                    <label for="nameInput">Имя</label>
                    <input v-model="form.name" type="text" class="form-control" id="nameInput"
                           aria-describedby="emailHelp" placeholder="Ваше Имя">
                </div>
                <div class="form-group">
                    <label for="phoneInput">Телефон</label>
                    <input v-model="form.phone" type="text" class="form-control" id="phoneInput"
                           placeholder="Укажите номер вашего телефона">
                </div>
                <div class="form-group">
                    <label for="bidInput">Обращение</label>
                    <textarea v-model="form.text" type="text" class="form-control" id="bidInput"
                              placeholder="Текст заявки" rows="3"/>
                </div>
                <button @click="store" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: '',
                    phone: '',
                    text: ''
                }
            }
        },
        methods: {
            store() {
                axios.post('store-bid', this.form).then((response) => {
                    Object.entries(response.data).forEach((item)=>{
                       alert(item[0]+' '+item[1]);
                    });
                }).catch((error)=>{
                    Object.values(error.response.data.errors).forEach((item)=>{
                        alert(item);
                    });
                });
            }
        }
    }
</script>
