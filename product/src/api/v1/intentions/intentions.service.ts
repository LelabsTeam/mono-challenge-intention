import { Injectable } from '@nestjs/common';
import { CreateIntentionDto } from './dto/create-intention.dto';
import { LoginResponseDto } from '../auth/dto/response-auth.dto';
import { HttpService } from '@nestjs/axios';
import { Observable, firstValueFrom, map } from 'rxjs';
import { AxiosRequestConfig, AxiosResponse } from 'axios';

@Injectable()
export class IntentionsService {
  constructor(private readonly httpService: HttpService) { }

  async create(createIntentionDto: CreateIntentionDto) {

    const { token, ...accessToken } = createIntentionDto;

    const headers: AxiosRequestConfig = {
      headers: {
        Authorization: `Bearer ${createIntentionDto.token}`,
      },
    };
    
    const { data } = await firstValueFrom(
      this.httpService.post(`${process.env.INTENTIONS_BASE_URL}/intentions`, createIntentionDto, headers).pipe());
    return data;
  }
}
