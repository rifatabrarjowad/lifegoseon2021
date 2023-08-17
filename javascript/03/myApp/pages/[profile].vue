<script setup>
const route = useRoute();
console.log(route.params.profile);
</script>
<template>
    <div>
        <h1 class="text-3xl font-bold underline">
            Hello {{ $route.params.profile }} !
        </h1>
        <p class="text-xl">
            This is the Profile page
        </p>
    </div>
</template>