<template>

    <div>
        <div class="my-4 flex justify-center">
            <a @click="toggleFormActive()" class="text-dashboard inline-block text-white font-semibold bg-cool-green hover:bg-white hover:text-cool-green border-transparent hover:border-cool-green border-2 px-8 py-2 rounded-lg shadow-md hover:shadow-none">Add a new property</a>
        </div>

        <div class="max-w-4xl mx-auto" v-if="newPropertyActive">
            <div class="rounded text-center bg-white shadow-md p-4 my-4">
                <h2 class="text-md font-bold text-2xl">Create a new property</h2>
                <p class="mt-1">
                    A <i>property</i> is any domain that you own on the
                    internet. A property can have many many websites
                    associated with it, hosted at various subdomains. For
                    example if you owned the property <b>mybusiness.com</b>,
                    you could have a site on <b>help.mybusiness.com</b> or
                    <b>coolstuff.mybusiness.com</b>. Subdomains are infinitely
                    available. Any one property can have many sites
                    associated with it.
                </p>

                <div v-if="hasErrors" class="text-left bg-brand-pink p-4 text-white rounded shadow my-8">
                    <h1 class="font-bold text-3xl">You've got some errors!</h1>
                    <ul>
                        <li v-for="error in parsedErrors">{{ error }}</li>
                    </ul>
                </div>

                <form action="/properties/create" method="POST">
                    <input type="hidden" name="_token" v-model="csrfToken">
                    <div class="text-left my-8">
                        <label class="font-semibold">Property name</label>
                        <input type="text" placeholder="Dunder Mifflin Paper Company" name="name" class="bg-gray-100 shadow w-full mt-2 rounded py-3 px-4">
                    </div>

                    <div class="text-left my-8">
                        <label class="font-semibold">Top-level domain</label>
                        <input type="text" placeholder="dundermifflinpaper.com" name="domain" class="bg-gray-100 shadow w-full mt-2 rounded py-3 px-4">
                    </div>

                    <div class="text-left my-8">
                        <button type="submit" class="text-dashboard inline-block text-white font-semibold bg-cool-green hover:bg-white hover:text-cool-green border-transparent hover:border-cool-green border-2 px-8 py-2 rounded-lg shadow-md hover:shadow-none">Create new property</button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</template>

<script>
    export default {
        name: "NewPropertyForm",
        props: ['csrfToken', 'errors'],
        data() {
            return {
                newPropertyActive: false,
                hasErrors: false
            }
        },
        computed: {
            parsedErrors() {
                return JSON.parse(this.$props.errors);
            }
        },
        methods: {
            toggleFormActive() {
                this.newPropertyActive = !this.newPropertyActive;
            }
        },
        mounted: function() {
            if(JSON.parse(this.$props.errors).length > 0){
                this.hasErrors = true;
                this.newPropertyActive = true;
            }
        }
    }
</script>

<style scoped>

</style>