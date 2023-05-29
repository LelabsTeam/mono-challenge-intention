import { Controller, Get, Redirect } from '@nestjs/common';
import { AppService } from './app.service';
import { AxiosResponse } from 'axios';
import { Observable } from 'rxjs';

@Controller()
export class AppController {
  constructor(private readonly appService: AppService) {}

  @Get()
  @Redirect(process.env.PRODUCTS_URL, 301)

  @Get('ping')
  ping(): {} {
    const response = this.appService.ping();
    return response;
  }
}
