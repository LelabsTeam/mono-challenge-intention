import { Injectable } from '@nestjs/common';
import { firstValueFrom } from 'rxjs';
import { LoginResponseDto } from './dto/response-auth.dto';
import { HttpService } from '@nestjs/axios';


@Injectable()
export class AuthService {
  constructor(private readonly httpService: HttpService) { }

  async login(loginDto) {
    
    const { data } = await firstValueFrom(
      this.httpService.post<LoginResponseDto>(`${process.env.INTENTIONS_BASE_URL}/user/login`, loginDto.user).pipe());
    return data.content.token;

  }
}
