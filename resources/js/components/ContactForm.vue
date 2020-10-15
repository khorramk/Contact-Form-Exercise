<template>
    <div class="container">
        <div class="card pt-3 pb-3 border shadow-lg">
            <form class=" card-body d-flex flex-column ">
                <div class="form-row">
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" v-model="user.first_name" placeholder="First name">
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" v-model="user.last_name" placeholder="Last name">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <label for="m-email">Email</label>
                        <input type="email" class="form-control" v-model="user.email" id="m-email" placeholder="smith@email.com">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <label for="phone">Phone number</label>
                    <input class="form-control" type="tel" id="phone" v-model="user.phone" name="phone" pattern="[+][0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                </div>
                <div class="form-row mb-2">
                    <label for="m-message">Message</label>
                    <textarea class="form-control" name="m-message" v-model="user.message" id="m-message" cols="30" rows="6"></textarea>
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
                submitted: 'Submit'
            }
        },
        methods: {
            submit(){
                console.log(this.user);
                this.nonClickable = true;
                this.submitted = 'Submitted'
                axios.post('/api/submit', this.user).then(() => /**response or redirect**/'');
            }
        }
}
</script>

<style>


</style>
