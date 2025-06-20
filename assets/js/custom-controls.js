(function(api) {

  api.sectionConstructor['lumivox-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const lumivox_section_lists = ['banner', 'service'];
  lumivox_section_lists.forEach(lumivox_homepage_scroll);

  function lumivox_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('lumivox_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);