import express, { Request, Response } from 'express';
import { PrismaClient } from '@prisma/client';
import bodyParser from 'body-parser';

const prisma = new PrismaClient();

const app = express();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.get('/intentions', async (req: Request, res: Response) => {
  try {
    const intentions = await prisma.intention.findMany();
    res.json(intentions);
  } catch (error) {
    console.error('Erro ao buscar as intenções:', error);
      res.status(500).json({ error: 'Erro ao buscar as intenções.' });
  }
});


app.post('/intentions', async (req: Request, res: Response) => {
  try {
    const {address, name, product} = req.body;  
    const intentions = await prisma.intention.create({
      data: {
        address,
        name,
        product
      },
    })

    res.json(intentions);
  } catch (error) {
    console.error('Erro ao buscar as intenções:', error);
    res.status(500).json({ error: 'Erro ao buscar as intenções.' });
  }
})

app.listen(3333, () => console.log('rodando API'));
