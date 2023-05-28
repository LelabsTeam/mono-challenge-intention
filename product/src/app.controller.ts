import { Controller, Get } from '@nestjs/common';
import { AppService } from './app.service';
import { AxiosResponse } from 'axios';
import { Observable } from 'rxjs';

@Controller()
export class AppController {
  constructor(private readonly appService: AppService) {}

  
  @Get()
  callExternalAPI(): Promise<any> {
    const response = this.appService.getHelloo();
    return response;
  }
}
