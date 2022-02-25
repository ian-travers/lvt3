<template>
    <div class="space-y-4" @keydown="form.errors.clear($event.target.name)">
        <div>
            <div
                class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                <label for="name" class="block text-xs font-medium text-gray-900">Name</label>
                <input
                    v-model="form.name"
                    type="text"
                    name="name"
                    id="name"
                    class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                    placeholder="Project name"/>
            </div>
            <p v-if="form.errors.has('name')" v-text="form.errors.get('name')" class="mt-1 text-xs text-red-600"></p>
        </div>
        <div>
            <div
                class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                <label for="name" class="block text-xs font-medium text-gray-900">Description</label>
                <input
                    v-model="form.description"
                    type="text"
                    name="description"
                    id="description"
                    class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                    placeholder="Project brief description"/>
            </div>
            <p v-if="form.errors.has('description')" v-text="form.errors.get('description')"
               class="mt-1 text-xs text-red-600"></p>
        </div>

        <button
            @click.prevent="onSubmit"
            :disabled="form.errors.any()"
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
        if (field) {
            delete this.errors[field]

            return
        }

        this.errors = {}
    }
}

class Form {
    constructor(data) {
        this.originalData = data

        for (let field in data) {
            this[field] = data[field]
        }

        this.errors = new Errors()
    }

    data() {
        // Clone
        let data = Object.assign({}, this)

        delete data.originalData
        delete data.errors

        return data
    }

    reset() {
        for (let field in this.originalData) {
            this[field] = ''
        }

        this.errors.clear()
    }

    submit(requestType, url) {
        return new Promise((resolve, reject) => {
            axios[requestType](url, this.data())
                .then(response => {
                    this.onSuccess(response.data)

                    resolve(response.data)
                })
                .catch(error => {
                    this.onFail(error.response.data.errors)

                    reject(error.response.data.errors)
                })
        })

    }

    onSuccess(data) {
        this.reset()

        alert(data.message)
    }

    onFail(errors) {
        this.errors.record(errors)
    }
}

export default {
    data() {
        return {
            form: new Form({
                name: '',
                description: ''
            })
        }
    },

    methods: {
        onSubmit() {
            this.form.submit('post', '/projects')
                .then(data => console.log(data))
                .catch(errors => console.log(errors))
        }
    }
}
</script>
