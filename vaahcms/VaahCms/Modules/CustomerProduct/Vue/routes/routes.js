let routes= [];

import dashboard from "./vue-routes-dashboard";
import customer from "./vue-routes-customers";
import product from "./vue-routes-products";

routes = routes.concat(dashboard);
routes = routes.concat(customer);
routes = routes.concat(product);

export default routes;
