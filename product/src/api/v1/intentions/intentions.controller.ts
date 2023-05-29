import { Controller, Get, Post, Body, Patch, Param, Delete, ExecutionContext, Req } from '@nestjs/common';
import { IntentionsService } from './intentions.service';
import { CreateIntentionDto } from './dto/create-intention.dto';
import { AuthService } from '../auth/auth.service';
import { Request } from 'express';

@Controller('api/v1/intentions')
export class IntentionsController {
  constructor(private readonly intentionsService: IntentionsService, private readonly authService: AuthService) { }

  @Post()
  create(@Body() createIntentionDto: CreateIntentionDto) {
    return this.intentionsService.create(createIntentionDto);
  }
}
