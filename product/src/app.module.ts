import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { ConfigModule } from '@nestjs/config';
import { AppService } from './app.service';
import { HttpModule} from '@nestjs/axios';
import { ProductsModule } from './products/products.module';

@Module({
  imports: [ConfigModule.forRoot(), HttpModule, ProductsModule],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {}
