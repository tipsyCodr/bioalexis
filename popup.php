<cms:template title='Popup' clonable='1'>
    <cms:editable name='image' label='Image' type='image' show_preview='1' preview_height='200' />
    <cms:editable name='title' label='Title' type='text' />
    <cms:editable name="gg_thumb" assoc_field="image" label="Image Thumbnail" desc="Thumbnail of image above"
        width='200' height='200' enforce_max='1' type="thumbnail" />
</cms:template>