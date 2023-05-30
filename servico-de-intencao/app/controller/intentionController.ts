import { PrismaClient } from '@prisma/client';
import { Request, Response } from 'express';

const prisma = new PrismaClient();

export const getAllIntentions = async (req: Request , res: Response) => {
    try {
      const intention = await prisma.intention.findMany();
      res.send(intention);
    } catch (error) {
      res.status(500).json({ error: 'Erro ao buscar os intenções.' });
    }
};