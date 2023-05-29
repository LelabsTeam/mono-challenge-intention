import { Injectable } from '@nestjs/common';
import { HttpService } from '@nestjs/axios';
import { firstValueFrom } from 'rxjs';

@Injectable()
export class ProductsService {
  constructor(private readonly httpService: HttpService) {}

  async getAll() {
    const { data } = await firstValueFrom(
      this.httpService.get<[]>(`${process.env.FAKE_STORE_BASE_URL}/products`).pipe(),
    );
    return data;
  }
}
