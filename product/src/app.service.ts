
import { HttpService } from '@nestjs/axios';
import { Injectable } from '@nestjs/common';
import { AxiosError } from 'axios';
import { env } from 'process';
import { catchError, firstValueFrom } from 'rxjs';

@Injectable()
export class AppService {
  constructor(private readonly httpService: HttpService) {}

  async getHelloo(): Promise<[]> {
    const { data } = await firstValueFrom(
      this.httpService.get<[]>(process.env.FAKE_STORE_BASE_URL+'/products').pipe(),
    );
    return data;
  }
}