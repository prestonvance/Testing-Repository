<script>
fetch("zphp/ajax/sortednames.php") 
.then(function() {
    echo console.log(response);
})
.catch(function() {
    // This is where you run code if the server returns any errors
});
</script>
