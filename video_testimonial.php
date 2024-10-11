<?php
require_once('couch/cms.php'); ?>
<cms:template title='Video testimonials' clonable='1' dynamic_folders='1' gallery='1'>
    <cms:editable name="caption" label="caption" type="text" />
    <cms:editable name="video_link" label="Video Link" desc="Enter the link of the video" type="text" />
</cms:template>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Testmonial</title>
</head>

<body>
<cms:pages masterpage='video_testimonial.php' paginate='1' limit='30'>
    <div class="testimonial-item tw-shadow tw-p-4 tw-rounded tw-mb-4 tw-bg-white">
        <img src="<cms:show gg_image />" alt="<cms:show caption />" class="tw-w-full tw-h-auto tw-rounded" />
        <h3 class="tw-text-lg tw-font-semibold tw-mt-2">
            <cms:show caption />
        </h3>
        <div class="tw-mt-2">
            <cms:if "<cms:show video_link />">
                <script>
                    var url = "<cms:show video_link />";
                    var id = "";

                    // Check if the URL is in youtu.be format
                    if (url.includes('youtu.be/')) {
                        id = url.split('youtu.be/')[1].split('?')[0]; // Get the video ID
                    } 
                    // Check if the URL is in youtube.com format
                    else if (url.includes('youtube.com/watch?v=')) {
                        id = url.split('v=')[1].split('&')[0]; // Get the video ID
                    } 
                    // Check if the URL is in a different format (optional)
                    else {
                        console.error("Invalid YouTube URL:", url);
                    }

                    // Only write the iframe if the ID is valid
                    if (id) {
                        document.write('<iframe width="100%" height="300" src="https://www.youtube.com/embed/' + id + '" frameborder="0" allowfullscreen></iframe>');
                    }
                </script>
            </cms:if>
        </div>
    </div>
</cms:pages>



</body>

</html>
<?php COUCH::invoke(); ?>
