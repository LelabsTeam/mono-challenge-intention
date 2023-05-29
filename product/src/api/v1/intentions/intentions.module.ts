import { Module } from '@nestjs/common';
import { IntentionsService } from './intentions.service';
import { IntentionsController } from './intentions.controller';
import { HttpModule } from '@nestjs/axios';
import { AuthService } from '../auth/auth.service';

@Module({
  imports: [HttpModule],
  controllers: [IntentionsController],
  providers: [IntentionsService, AuthService]
})
export class IntentionsModule {}
