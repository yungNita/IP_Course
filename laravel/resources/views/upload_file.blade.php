<html>
<body>
    <h3>Upload Image</h3>   
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="document" accept="image/*" />
        <button type="submit">Upload</button>
    </form>
</body>
</html>