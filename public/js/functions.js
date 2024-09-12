function showFileName() {
    const input = document.getElementById('image-upload');
    const fileNameSpan = document.getElementById('file-name');
    const maxLength = 20; // Set the max length for the file name

    // Display the file name if a file is selected
    if (input.files.length > 0) {
        let fileName = input.files[0].name;

        // Check if the file name is too long and truncate if necessary
        if (fileName.length > maxLength) {
            // Truncate the file name to display part of it with '...'
            fileName = `${fileName.slice(0, Math.floor(maxLength / 2))}...${fileName.slice(-5)}`;
        }

        fileNameSpan.textContent = fileName;
    } else {
        fileNameSpan.textContent = '';
    }
}
