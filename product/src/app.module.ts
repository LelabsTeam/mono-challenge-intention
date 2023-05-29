import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { ConfigModule } from '@nestjs/config';
import { AppService } from './app.service';
import { HttpModule} from '@nestjs/axios';
import { IntentionsModule } from './api/v1/intentions/intentions.module';
import { ProductsModule } from './api/v1/products/products.module';
import { AuthModule } from './api/v1/auth/auth.module';
@Module({
  imports: [ConfigModule.forRoot(), HttpModule, ProductsModule, IntentionsModule, AuthModule],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {}
