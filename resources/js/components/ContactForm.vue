<template>
    <div class="container">
        <div class="card pt-3 pb-3 border shadow-lg">
            <form class=" card-body d-flex flex-column ">
                <div class="form-row">
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" v-model="user.first_name" placeholder="First name" :required="required">
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" v-model="user.last_name" placeholder="Last name" :required="required">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <label for="m-email">Email</label>
                        <input type="email" class="form-control" v-model="user.email" id="m-email" placeholder="smith@email.com" :required="required">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <label for="phone">Phone number</label>
                    <input class="form-control" type="tel" id="phone" v-model="user.phone" name="phone" :required="required">
                </div>
                <div class="form-row mb-2">
                    <label for="m-message">Message</label>
                    <textarea class="form-control" name="m-message" v-model="user.message" id="m-message" cols="30" rows="6" :required="required"></textarea>
                </div>
                <button type="submit" class="btn btn-danger" @click="submit" :disabled="nonClickable">
                    {{ submitted }}
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
        data(){
            return {
                user: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    message: ''
                },
                nonClickable: false,
                submitted: 'Submit',
                required: true
            }
        },
        methods: {
            submit(){
                this.checkForEmptyField();
                if (!this.required) {
                    this.nonClickable = true;
                    this.submitted = 'Submitted';
                    axios.post('/api/submit', this.user).then((response) => {
                        window.location.href = '/message';
                    });
                }
            },
            checkForEmptyField(){
                if ( this.user.first_name != '' && this.user.last_name != ''
                     && this.user.email != '' && this.user.phone != '' && this.user.message != '') {
                    this.required = false;
                }
            }
        }
}
</script>

<style>


</style>
