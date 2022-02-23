<template>
    <ul>
        <li v-for="skill in skills">{{ skill}}</li>
    </ul>
</template>

<script>
export default {
    data() {
        return {
            skills: []
        }
    },
    mounted() {
        axios
            .get('/skills')
            .then(response => this.skills = response.data)
    }
}
</script>

