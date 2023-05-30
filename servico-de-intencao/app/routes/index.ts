import {Router} from 'express';
import { intentionRoutes } from './intention.routes';

const routes = Router();
routes.use('/intentions', intentionRoutes);

export { routes }