<template>
    <div :id="name" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modal">
            <slot></slot>
            <footer class="flex">
                <slot name="footer"></slot>
            </footer>
            <a href="#" class="close text-3xl">&times;</a>
        </div>
    </div>
</template>

<script>
export default {
    props: ['name'],
}
</script>

<style>
.overlay {
    visibility: hidden;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, .4);
    transition: opacity .3s;
    opacity: 0;
}

.overlay:target {
    visibility: visible;
    opacity: 1;
}

.modal {
    position: relative;
    width: 600px;
    max-width: 80%;
    background: white;
    border-radius: 4px;
    padding: 1em 2.5em;
    box-shadow: 0 5px 11px rgba(0, 128, 128, .4);
}
.modal .close {
    position: absolute;
    top: 15px;
    right: 20px;
    color: gray;
    text-decoration: none;
}

.overlay .cancel {
    position: absolute;
    width: 100%;
    height: 100%;
}


</style>
