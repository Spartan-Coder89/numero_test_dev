document.addEventListener('DOMContentLoaded', () => {

  let upload_frame

  document.getElementById('update_property_bought').addEventListener('click', () => {
    
    if (upload_frame) {
      upload_frame.open();
      return;
    }

    upload_frame = wp.media({
      title: 'Select or Upload Image',
      button: { text: 'Use this image' },
      multiple: false
    })

    upload_frame.on('select', function(){
      const attachment = upload_frame.state().get('selection').first().toJSON()
      document.getElementById('img_preview').style = 'background-image: url('+ attachment.url +')'
      document.getElementById('property_bought_img').value = attachment.url
    })

    upload_frame.open()
  })
})