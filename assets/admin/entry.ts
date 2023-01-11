
import { ArchivedMassActionDirective } from "./directives/archived/archived-mass-action.directive";

const massActionDirectives = new ArchivedMassActionDirective(document.querySelector('[archived-mass-action]'));
massActionDirectives.init();
