import { Router } from "express";
import { getAllIntentions } from "../controller/intentionController";

const intentionRoutes = Router();
intentionRoutes.get('/intentions', () => console.log("ola mundo"));

export { intentionRoutes }
