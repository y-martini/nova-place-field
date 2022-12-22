import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app) => {
  app.component('index-yuriy-martini-example-field', IndexField)
  app.component('detail-yuriy-martini-example-field', DetailField)
  app.component('form-yuriy-martini-example-field', FormField)
})
