<template>
    <div class="space-y-4" @keydown="errors.clear($event.target.name)">
        <div>
            <div
                class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                <label for="name" class="block text-xs font-medium text-gray-900">Name</label>
                <input
                    v-model="name"
                    type="text"
                    name="name"
                    id="name"
                    class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                    placeholder="Project name"/>
            </div>
            <p v-if="errors.has('name')" v-text="errors.get('name')" class="mt-1 text-xs text-red-600"></p>
        </div>
        <div>
            <div
                class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                <label for="name" class="block text-xs font-medium text-gray-900">Description</label>
                <input
                    v-model="description"
                    type="text"
                    name="description"
                    id="description"
                    class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                    placeholder="Project brief description"/>
            </div>
            <p v-if="errors.has('description')" v-text="errors.get('description')" class="mt-1 text-xs text-red-600"></p>
        </div>

        <button
            @click.prevent="onSubmit"
            :disabled="errors.any()"
            type="button"
            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 disabled:opacity-50"
        >
            Create
        </button>
    </div>
</template>

<script>
class Errors {
    constructor() {
        this.errors = {}
    }

    has(field) {
        return this.errors.hasOwnProperty(field)
    }

    any() {
        return Object.keys(this.errors).length > 0;
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0]
        }
    }

    record(errors) {
        this.errors = errors;
    }

    clear(field) {
        delete this.errors[field]
    }
}

export default {
    data() {
        return {
            name: '',
            description: '',
            errors: new Errors(),
        }
    },

    methods: {
        onSubmit() {
            axios.post('/projects', this.$data)
                .then(response => alert(response.data.message))
                .catch(error => this.errors.record(error.response.data.errors))
        }
    }
}
</script>
