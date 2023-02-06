<template>
    <div>
      <h1>Show Post</h1>
      <p>
        Lo slug del post è: {{ slug }}
      </p>
    </div>
  </template>

  <script>
  export default {
    props: [
        'slug',
    ]
  }
  </script>

  <style>

  </style>
