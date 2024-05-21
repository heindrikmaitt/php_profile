<!-- JavaScript -->
<script>
    document.getElementById('loadMoreButton').addEventListener('click', function() {
        var galleryContainer = document.querySelector('.gallery-container');
        var newImage = document.createElement('img');
        newImage.src = '10.jpeg';
        newImage.alt = 'New Image';
        newImage.className = 'gallery-img';
        galleryContainer.appendChild(newImage);
    });
</script>
